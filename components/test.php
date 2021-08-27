<?php
function TestComponent($testInternal = "") {
    $testVariable = "test".$testInternal;
    ?>
        <div class="TestComponent" id="TestComponent"><?php echo $testVariable; ?></div>
    <?
}
?>