<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    /**
     * PRODUCT ATTRIBUTES
     * $this->attributes['id'] - int - contains the product primary key (id)         // contiene la llave primaria del modelo
     * $this->attributes['name'] - string - contains the product name                // contiene el nombre del producto
     * $this->attributes['description'] - string - contains the product description  // contiene una descripicion del producto
     * $this->attributes['image'] - string - contains the product image
     * $this->attributes['price'] - int - contains the product price
     * $this->attributes['created_at'] - timestamp - contains the product creation date
     * $this->attributes['updated_at'] - timestamp - contains the product update date
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
    ];
    public static function validate($request)
    {
        $request->validate([
            "name" => "required|max:255",
            "description" => "required",
            "price" => "required|numeric|gt:0",
            'image' => 'image',
        ]);
    }
    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }
    public function getName()
    {
        return $this->attributes['name'];
    }
    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }
    public function getDescription()
    {
        return $this->attributes['description'];
    }
    public function setDescription($description)
    {
        $this->attributes['description'] = $description;
    }
    public function getImage()
    {
        return $this->attributes['image'];
    }
    public function setImage($image)
    {
        $this->attributes['image'] = $image;
    }
    public function getPrice()
    {
        return $this->attributes['price'];
    }
    public function setPrice($price)
    {
        $this->attributes['price'] = $price;
    }
    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }
    public function setCreatedAt($createdAt)
    {
        $this->attributes['created_at'] = $createdAt;
    }
    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }
    public function setUpdatedAt($updatedAt)
    {
        $this->attributes['updated_at'] = $updatedAt;
    }
    public function getUpperedName()
    {
        return strtoupper($this->getName());
    }
}
