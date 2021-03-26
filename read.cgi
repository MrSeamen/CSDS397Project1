#! /bin/bash


echo "hello $1 $2"

$park=$1
$aspect="${2^}:"

readfor $park $aspect

readfor() {
	
	$output = cat $1
	$index = expr index "$output" "$aspect"	
	${output:$index:$((${#output} - ${#index}))}
	$index = expr index "$output" ";"
	${output:$index:$((${#output} - ${#index}))}
	echo "<p>$output</p><br>"
}
