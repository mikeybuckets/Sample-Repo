// The output is formated so that the extensions are on seperate lines.

<?php 
foreach (get_loaded_extensions() as $i => $ext)
{
   echo $ext .' => '. phpversion($ext). '<br/>';
}
