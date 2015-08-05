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
    $source = $out;
}


if (!isset($control->action)) {
    echo "<code>ERR action not defined</code>";
    $check_property = false;
}



?>
<tr>
    <td><?php echo $control->name ?></td>
        <td> 
        <div class="form-inline">
        <div class="form-group">
         <select class="form-control" id="<?php echo $key ?>">
        <?php
        foreach ($source as $item) {
          //
        ?>     
          <option><? echo $item ?></option>
        <?php

        }
        ?>
        </select>
        <button 
               class="btn btn-lg btn-success"
               data-id="<?php echo $key ?>" 
               data-command="<?php echo $control->action ?>"
               onclick="buttonsClickedSelect(this)">
               <span class="glyphicon glyphicon-log-out"></span>
        </button>
        </div>
        </div>
        </td> 
</tr>
      
