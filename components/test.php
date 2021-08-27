<?php
// $value = $_GET["test_request_value"];
function TestComponent($testInternal = "") {
    // global $value;
    $testVariable = "test".$testInternal;
    ?>
        <div class="TestComponent" id="TestComponent"><?php echo $testVariable; ?></div>
    <?
}
?>