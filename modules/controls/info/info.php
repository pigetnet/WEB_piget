<?php
$check_property = true;
unset($source);
unset($out);
if (!isset($control->name)) {
    echo "<code>ERR name not defined</code>";
    $check_property = false;
}

if (!isset($control->source)) {
    echo "<code>ERR source not defined</code>";
    $check_property = false;
} else {
    exec($control->source, $out, $err);
    $source = $out[0];

}
?>
<tr>
    <td><?php echo $control->name ?></td>
        <td>    
            <?php echo $source ?>
        </td>
</tr>

