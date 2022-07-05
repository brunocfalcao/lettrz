<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="{{ $parameters['background-color'] }}">
    <tr>
        <td align="center" valign="top">
            <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
                <tr>
                    <td align="center" valign="middle" bgcolor="{{ $parameters['foreground-color'] }}">
                        <table width="580" border="0" align="center" cellpadding="0" cellspacing="0" class="two-left-inner">
                            <tr>
                                <td height="65" align="center" valign="middle" style="font-size:35px; line-height:35px;">&nbsp;</td>
                            </tr>
                            <tr>
                                <td align="center" valign="top" class="two-left">
                                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td align="left" valign="top" style="font-family:Verdana, Geneva, sans-serif; font-size:26px; color: {{ $parameters['lettering-bold-color'] }}; font-weight:normal; line-height:40px; text-transform:none;" mc:edit="um20-04">
                                                <multiline>{!! $parameters['title'] !!}</multiline>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="15" align="left" valign="top" style="font-size:15px; line-height:15px;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td align="left" valign="top" style="font-family:'Open Sans', Verdana, Arial; font-size:14px; font-weight:normal; color:{{ $parameters['lettering-paragraph-color'] }}; line-height:30px;" mc:edit="um20-05">
                                                @foreach($parameters['paragraphs'] as $paragraph)
                                                <multiline>
                                                    {!! $paragraph !!}
                                                    @if (!$loop->last)
                                                    <br/><br/>
                                                    @endif
                                                </multiline>
                                                @endforeach
                                            </td>
                                        </tr>
                                        @isset($parameters['button'])
                                        <tr>
                                            <td height="40" align="center" valign="top" style="font-size:15px; line-height:15px;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="top">
                                                <table width="{{ $parameters['button']['width'] }}" border="0" align="left" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td height="40" align="center" valign="middle" style="background:{{ $parameters['button']['background-color'] }};-moz-border-radius: 40px; border-radius: 40px; font-family: 'Work Sans', Calibri, sans-serif; font-size:15px; font-weight:bold; color:{{ $parameters['button']['text-color'] }};" mc:edit="um20-06">
                                                            <multiline><a target="_new" href="{{ $parameters['button']['url'] }}" style="text-decoration:none; color:#FFF;">{{ $parameters['button']['text'] }}</a></multiline>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        @endisset
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td height="75" align="center" valign="middle" style="font-size:25px; line-height:25px;">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
