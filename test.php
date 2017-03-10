<?php

class Book
{
	public $author;
	public $name;
	public $numberOfPages;
	public $year;
	public $publishingOffice;
	public $editionNumber;

	public function getAuthor()
	{
		return $this->author;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getNumberOfPages()
	{
		return $this->numberOfPages;
	}

	public function getYear()
	{
		return $this->year;
	}

	public function getPublishingOffice()
	{
		return $this->publishingOffice;
	}

	public function getEditionNumber()
	{
		return $this->editionNumber;
	}

	public function displayTable()
	{
		$content = '<table style="border: 1px solid #000">';
	    $content .= '<tr><td>Author</td><td>'. $this->getAuthor() . '</td></tr>';
	    $content .= '<tr><td>Name</td><td>'. $this->getName() . '</td></tr>';
	    $content .= '<tr><td>Number of pages</td><td>'. $this->getNumberOfPages() . '</td></tr>';
	    $content .= '<tr><td>Year</td><td>'. $this->getYear() . '</td></tr>';
	    $content .= '<tr><td>Publishing office</td><td>'. $this->getPublishingOffice() . '</td></tr>';
	    $content .= '<tr><td>Edition number</td><td>'. $this->getEditionNumber() . '</td></tr>';
	    $content .= '</table>';
	    return $content;
	}

	public function displayUnformatted()
	{
		$content = '<div style="border:1px solid #ddd">';
	    $content .= '<label>Author:</label><div>'. $this->getAuthor() . '</div>';
	    $content .= '<label>Name:</label><div>'. $this->getName() . '</div>';
	    $content .= '<label>Number of pages:</label><div>'. $this->getNumberOfPages() . '</div>';
	    $content .= '<label>Year:</label><div>'. $this->getYear() . '</div>';
	    $content .= '<label>Publishing office:</label><div>'. $this->getPublishingOffice() . '</div>';
	    $content .= '<label>Edition number:</label><div>'. $this->getEditionNumber() . '</div>';
	    $content .= '</div>';
	    return $content;
	}
}

$book1 = new Book();
$book1->author = 'Abramenko I.A';
$book1->name = 'Drupal: User guide';
$book1->numberOfPages = 192;
$book1->year = 2013;
$book1->publishingOffice = 'Moscow';
$book1->editionNumber = 1;

$book2 = new Book();
$book2->author = 'Leshkina S.O.';
$book2->name = 'Drupal: Fields, Images, Views';
$book2->numberOfPages = 200;
$book2->year = 2013;
$book2->publishingOffice = 'Moscow';
$book2->editionNumber = 1;

echo $book1->displayTable();
echo $book2->displayUnformatted();

class WorkWithArray
{
	public $myArray = [];

	public function increment_all_elements()
	{
		foreach ($this->myArray as $key => $val) {
			$this->myArray[$key] = $val + 1;
		}
	}
}

$myObject = new WorkWithArray();
$myObject->myArray = [2, 4, 6, 7];
$myObject->increment_all_elements();
print_r($myObject);