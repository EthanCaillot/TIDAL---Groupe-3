<html>
    <head>
        <title>Smarty</title>
    </head>
    <body>

<table>

    <tr>
        <td> Pathologies </td>
        <td> Symptomes </td>
    </tr>

<tr>
        {foreach $symptomes as $Symptome}
    <td>{$Symptomes.desc}</td>
        {foreach $Pathologies as $Pathologie}
    <td>{$Pathologie.type}</td>
{/foreach}

</tr>
{/foreach}

</table>


<br>
</body>
</html>