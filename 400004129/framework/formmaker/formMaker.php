<?php
class formMaker
{
    public static function start(string $method, string $action, string $class = '')
    {
        echo "<form method='$method' action='$action' class='$class'>";
    }

    public static function end()
    {
        echo "</form>";
    }

    public static function textbox(string $class = '', string $id = '', string $name = '', string $placeholder = '')
    {
        echo "<input type='text' class='$class' id='$id' name='$name' placeholder='$placeholder'>";
    }

    public static function password(string $class = '', string $id = '', string $name = '', string $placeholder = '')
    {
        echo "<input type='password' class='$class' id='$id' name='$name' placeholder='$placeholder'>";
    }

    public static function submitButton(string $class = '', string $id = '', string $name = '', string $value = '')
    {
        echo "<input type='submit' class='$class' id='$id' name='$name' value='$value'>";
    }

    public static function label(string $for = '', string $class = '', string $id = '', string $text = '')
    {
        echo "<label for='$for'>$text</label>";
    }
}
