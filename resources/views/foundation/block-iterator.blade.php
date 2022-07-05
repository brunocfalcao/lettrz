@foreach($blocks as $block)
<x-dynamic-component
    :component="'lettrz::blocks.' . $block['component'] . '.' . $type"
    :parameters="$block['parameters']"
    :uuid="$uuid"
    :preheader="$preheader"
/>
@endforeach
