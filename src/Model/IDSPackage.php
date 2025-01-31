<?php
/**
 * IDSPackage
 *
 * PHP version 8.1
 *
 * @package  kruegge82\shipstage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Shipstage API
 *
 * Wenn Sie die API verwenden möchten, wenden Sie sich bitte an den Support, um ein Authentifizierungstoken zu erhalten.
 *
 * The version of the OpenAPI document: 2.0
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace kruegge82\shipstage\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use kruegge82\shipstage\ObjectSerializer;

/**
 * IDSPackage Class Doc Comment
 *
 * @package  kruegge82\shipstage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class IDSPackage implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'IDSPackage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'required_items' => 'bool',
        'weight' => 'float',
        'number' => 'int',
        'length' => 'int',
        'width' => 'int',
        'height' => 'int',
        'free_reference' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'required_items' => null,
        'weight' => null,
        'number' => null,
        'length' => null,
        'width' => null,
        'height' => null,
        'free_reference' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'required_items' => false,
        'weight' => false,
        'number' => false,
        'length' => false,
        'width' => false,
        'height' => false,
        'free_reference' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'required_items' => 'required_items',
        'weight' => 'weight',
        'number' => 'number',
        'length' => 'length',
        'width' => 'width',
        'height' => 'height',
        'free_reference' => 'free_reference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'required_items' => 'setRequiredItems',
        'weight' => 'setWeight',
        'number' => 'setNumber',
        'length' => 'setLength',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'free_reference' => 'setFreeReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'required_items' => 'getRequiredItems',
        'weight' => 'getWeight',
        'number' => 'getNumber',
        'length' => 'getLength',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'free_reference' => 'getFreeReference'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(array|null $data = null)
    {
        $this->setIfExists('required_items', $data ?? [], false);
        $this->setIfExists('weight', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('length', $data ?? [], null);
        $this->setIfExists('width', $data ?? [], null);
        $this->setIfExists('height', $data ?? [], null);
        $this->setIfExists('free_reference', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }
        if (!is_null($this->container['number']) && ($this->container['number'] < 1)) {
            $invalidProperties[] = "invalid value for 'number', must be bigger than or equal to 1.";
        }

        if ($this->container['length'] === null) {
            $invalidProperties[] = "'length' can't be null";
        }
        if (($this->container['length'] > 500)) {
            $invalidProperties[] = "invalid value for 'length', must be smaller than or equal to 500.";
        }

        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
        if (($this->container['width'] > 220)) {
            $invalidProperties[] = "invalid value for 'width', must be smaller than or equal to 220.";
        }

        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if (($this->container['height'] > 200)) {
            $invalidProperties[] = "invalid value for 'height', must be smaller than or equal to 200.";
        }

        if ($this->container['free_reference'] === null) {
            $invalidProperties[] = "'free_reference' can't be null";
        }
        if ((mb_strlen($this->container['free_reference']) > 20)) {
            $invalidProperties[] = "invalid value for 'free_reference', the character length must be smaller than or equal to 20.";
        }

        if ((mb_strlen($this->container['free_reference']) < 1)) {
            $invalidProperties[] = "invalid value for 'free_reference', the character length must be bigger than or equal to 1.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets required_items
     *
     * @return bool|null
     */
    public function getRequiredItems(): ?bool
    {
        return $this->container['required_items'];
    }

    /**
     * Sets required_items
     *
     * @param bool|null $required_items required_items
     *
     * @return $this
     */
    public function setRequiredItems(?bool $required_items): static
    {
        if (is_null($required_items)) {
            throw new InvalidArgumentException('non-nullable required_items cannot be null');
        }
        $this->container['required_items'] = $required_items;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return float
     */
    public function getWeight(): float
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param float $weight weight
     *
     * @return $this
     */
    public function setWeight(float $weight): static
    {
        if (is_null($weight)) {
            throw new InvalidArgumentException('non-nullable weight cannot be null');
        }
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets number
     *
     * @return int|null
     */
    public function getNumber(): ?int
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param int|null $number number
     *
     * @return $this
     */
    public function setNumber(?int $number): static
    {
        if (is_null($number)) {
            throw new InvalidArgumentException('non-nullable number cannot be null');
        }

        if (($number < 1)) {
            throw new InvalidArgumentException('invalid value for $number when calling IDSPackage., must be bigger than or equal to 1.');
        }

        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets length
     *
     * @return int
     */
    public function getLength(): int
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param int $length length
     *
     * @return $this
     */
    public function setLength(int $length): static
    {
        if (is_null($length)) {
            throw new InvalidArgumentException('non-nullable length cannot be null');
        }

        if (($length > 500)) {
            throw new InvalidArgumentException('invalid value for $length when calling IDSPackage., must be smaller than or equal to 500.');
        }

        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int
     */
    public function getWidth(): int
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int $width width
     *
     * @return $this
     */
    public function setWidth(int $width): static
    {
        if (is_null($width)) {
            throw new InvalidArgumentException('non-nullable width cannot be null');
        }

        if (($width > 220)) {
            throw new InvalidArgumentException('invalid value for $width when calling IDSPackage., must be smaller than or equal to 220.');
        }

        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int
     */
    public function getHeight(): int
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int $height height
     *
     * @return $this
     */
    public function setHeight(int $height): static
    {
        if (is_null($height)) {
            throw new InvalidArgumentException('non-nullable height cannot be null');
        }

        if (($height > 200)) {
            throw new InvalidArgumentException('invalid value for $height when calling IDSPackage., must be smaller than or equal to 200.');
        }

        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets free_reference
     *
     * @return string
     */
    public function getFreeReference(): string
    {
        return $this->container['free_reference'];
    }

    /**
     * Sets free_reference
     *
     * @param string $free_reference free_reference
     *
     * @return $this
     */
    public function setFreeReference(string $free_reference): static
    {
        if (is_null($free_reference)) {
            throw new InvalidArgumentException('non-nullable free_reference cannot be null');
        }
        if ((mb_strlen($free_reference) > 20)) {
            throw new InvalidArgumentException('invalid length for $free_reference when calling IDSPackage., must be smaller than or equal to 20.');
        }
        if ((mb_strlen($free_reference) < 1)) {
            throw new InvalidArgumentException('invalid length for $free_reference when calling IDSPackage., must be bigger than or equal to 1.');
        }

        $this->container['free_reference'] = $free_reference;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


