<?php

class scatter_line
{
	function __construct( $colour )
	{
		$this->type      = "scatter_line";
		$this->set_colour( $colour );
	}
	
	function set_default_dot_style( $style )
	{
		$tmp = 'dot-style';
		$this->$tmp = $style;	
	}
	
	function set_colour( $colour )
	{
		$this->colour = $colour;
	}
	
	function set_values( $values )
	{
		$this->values = $values;
	}
	
	function set_step_horizontal()
	{
		$this->stepgraph = 'horizontal';
	}
	
	function set_step_vertical()
	{
		$this->stepgraph = 'vertical';
	}
	
	function set_key( $text, $font_size )
	{
		$this->text      = $text;
		$tmp = 'font-size';
		$this->$tmp = $font_size;
	}
}