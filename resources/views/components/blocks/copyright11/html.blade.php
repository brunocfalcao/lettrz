{{--

$mail->add('copyright11', ['foreground-color' => '#A8A8A8',
                           'caption' => 'Mastering Nova -',
                           'unsubscribe-url' => 'https://www.laravel.com']);

--}}
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="{{ $parameters['background-color'] }}">
    <tr>
        <td align="center" valign="top">
            <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
                <tr>
                    <td align="center" valign="middle" bgcolor="{{ $parameters['foreground-color'] }}">
                        <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" class="two-left-inner">
                            <tr>
                                <td width="600" height="25" colspan="3" align="center" valign="middle" style="font-size:25px; line-height:25px;">&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="200" align="left" valign="middle" class="two-left"><img mc:edit="um19-190" editable="true" src="{{ $parameters['logo-125x25'] }}" width="125" height="25" alt="" /></td>
                                <td width="60" align="center" valign="middle" class="two-left">&nbsp;</td>
                                <td width="340" align="right" valign="middle" style="font-family:'Open Sans', sans-serif, Verdana; font-size:15px; font-weight:normal; color:{{ $parameters['lettering-paragraph-color'] }}; line-height:32px;" class="two-left" mc:edit="um19-191">
                                    <multiline>{{ $parameters['caption'] }}</multiline>
                                    <b>
                                        <unsubscribe><a target="_new" href="{{ $parameters['unsubscribe-url'] }}" style="font-family:'Open Sans', sans-serif, Verdana; font-size:15px; font-weight:normal; color:{{ $parameters['lettering-unsubscribe-color'] }};font-weight:bold">Unsubscribe</a></unsubscribe>
                                    </b>
                                </td>
                            </tr>
                            <tr>
                                <td height="25" colspan="3" align="center" valign="middle" style="font-size:25px; line-height:25px;">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
