<?php
session_start();
include_once('../backend/db_connect.php');

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_lastname'     => $_POST["hidden_lastname"],
				'item_pic'     		=> $_POST["hidden_name_pic"],
				'item_measurement'  => $_POST["hidden_measurement"],
                'item_price'		=>	$_POST["hidden_price"],
				'item_technic'     	=> $_POST["hidden_technic"],
				'item_quantity'     => $_POST["hidden_quantity"],

			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_lastname'     => $_POST["hidden_lastname"],
			'item_pic'     		=> $_POST["hidden_name_pic"],
			'item_measurement'  => $_POST["hidden_measurement"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_technic'     	=> $_POST["hidden_technic"],
			'item_quantity'     => $_POST["hidden_quantity"],
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
			}
		}
	}
}