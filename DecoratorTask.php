<?php

interface DrawShape
{
	public function draw():void;
}

class Square implements DrawShape
{
	public function draw():void
	{
		echo "Shape Square\n";
	}
}

class Circle implements DrawShape
{
	public function draw():void
	{
		echo "Shape Circle\n";
	}
}

abstract class ColorShapeDecorator implements DrawShape
{
	protected $shape;

	public function __construct(DrawShape $shape)
	{
		$this->shape = $shape;
	}

	public function draw():void
	{
		$this->shape->draw();
	}
}

class RedShape extends ColorShapeDecorator
{
	public function draw(): void
	{
		$this->red();
		parent::draw();
	}

	public function red()
	{
		echo 'Red colored ';
	}
}

class BlueShape extends ColorShapeDecorator
{
	public function draw(): void
	{
		$this->blue();
		parent::draw();
	}

	public function blue()
	{
		echo 'Blue colored ';
	}
}

$shape = new Circle();
$redShape = new RedShape($shape);
$redShape->draw();
