<?php

namespace Brunocfalcao\Lettrz;

use Brunocfalcao\Lettrz\Models\Lettrz as LettrzModel;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LettrzMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The preheader is the preview text we see in the mobile email apps when
     * we preview an email.
     */
    public $preheader;

    /**
     * These are the email template blocks that can be generated,
     * with parameters. Please check the Lettrz Blade components
     * to see what blocks can be used. The name of the block
     * should be the kebab name of the Blade component class
     * name.
     */
    public $blocks = [];

    /**
     * The uuid that is generated for a "view in browser" link.
     */
    public $uuid = null;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Adds a new block to the email template body.
     *
     * @param string $component  Component name. E.g.: paragraph. It will render
     *                           "x-lettrz::blocks.paragraph"
     * @param mixed  $parameters The component parameters. Depending on the
     *                           component, it can be a string or an array
     *                           or key/values. The key will be the component
     *                           attribute name, the value is always a string.
     *
     * @return this
     */
    public function add(string $component, array $parameters = [])
    {
        $parameters = array_merge($this->defaultKeys(), $parameters);

        $this->blocks[] = ['component'  => $component,
                           'parameters' => $parameters];

        return $this;
    }

    protected function defaultKeys()
    {
        return config('lettrz.defaults');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        /**
         * -- View in Browser implementation --
         *
         * I could use the $this->buildViewData() for a quick content storage
         * but to avoid a mass growth data into the database I prefer to
         * only store the blocks data, and recreate the mailable again
         * using the saved blocks. The database size will not grow
         * in an unpredictable way (I hope!).
         */

        if (config('lettrz.view-in-browser.enabled') == true) {
            $instance = new LettrzModel();

            $instance->blocks = $this->blocks;
            $instance->preheader = $this->preheader;

            $instance->save();

            $this->uuid = $instance->uuid;
        }

        return $this->view('lettrz::foundation.html')
                    ->text('lettrz::foundation.text');
    }
}
