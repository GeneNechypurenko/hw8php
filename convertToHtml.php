<?php
function convertToHTML($control) {
    $style = "background: " . $control->getBackground() . "; width: " . $control->getWidth() . "px; height: " . $control->getHeight() . "px;";

    if ($control instanceof Button) {
        $type = $control->getSubmitState() ? "submit" : "button";
        return "<button type=\"$type\" name=\"" . $control->getName() . "\" style=\"$style\">" . $control->getValue() . "</button>";
    } elseif ($control instanceof Text) {
        return "<input type=\"text\" name=\"" . $control->getName() . "\" placeholder=\"" . $control->getPlaceholder() . "\" value=\"" . $control->getValue() . "\" style=\"$style\">";
    } elseif ($control instanceof Label) {
        return "<label for=\"" . $control->getParentName() . "\" style=\"$style\">" . $control->getParentName() . "</label>";
    }
    return "";
}
?>
