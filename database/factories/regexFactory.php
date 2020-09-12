<?php

namespace Database\Factories;

use App\Models\regex;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class regexFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = regex::class;

    /**
     * An array of elements to fill the URI.
     *
     * @var string
     */
    protected $fakeElementsArray;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'regex' => $this->createRegexFakeURI(),
        ];
    }

    /**
     * Create a URI with regex.
     *
     * @return string
     */
    public function createRegexFakeURI(){
        $uri = $this->createFakeURI();
        $uri = filter_var($uri, FILTER_SANITIZE_URL);
        $uri = str_replace('/','\/',$uri);
        $uri = '^'. $uri . '$';
        return $uri;
    }

    /**
     * Create a URI.
     *
     * @return string
     */
    public function createFakeURI(){
        $uriLastLevel = rand(1,5);
        $uri = "/";

        for($i = 1; $i <= $uriLastLevel; $i++){
            $this->fillFakeElementsArray();
            $fakeElement = rand(0, sizeof($this->fakeElementsArray) - 1);
            $uri .= $this->fakeElementsArray[$fakeElement] . "/";
        }

        return $uri;
    }

    /**
     * Fill FakeElementsArray .
     *
     * @return string
     */
    public function fillFakeElementsArray(){
        $this->fakeElementsArray = [
            "[0-9]+",
            "[0-f]+",
            "[a-zA-Z]+",
            "#([a-f0-9]{6}|[a-f0-9]{3})",
            $this->faker->countryCode,
            $this->faker->languageCode,
            $this->faker->currencyCode,
            $this->faker->jobTitle,
            $this->faker->word,
        ];
    }
}
