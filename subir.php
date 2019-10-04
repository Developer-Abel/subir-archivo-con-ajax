<?php

move_uploaded_file($_FILES['archivo']['tmp_name'], "img/".$_FILES['archivo']['name']);

echo  $_FILES['archivo']['name'];