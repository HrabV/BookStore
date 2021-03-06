<?php


namespace app\models;

class Co_author extends ModelObject
{
    public int $id;
    public string $fio;
    public int $country_id;
    public int $book_id;
    public string $birthday;
    public string $photo;
    
    /**
     * __construct
     *
     * @param  mixed $co_author
     * @return void
     */
    public function __construct(array $author)
    {
        $this->id = $author['id'];
        $this->fio = $author['fio'];
        $this->country_id = $author['country_id'];
        $this->book_id = $author['book_id'];
        $this->birthday = $author['birthday'];
        $this->photo = $author['photo'];
       
    }
    /**
     * get_id
     *
     * @return int
     */
    public function get_id(): int
    {
        return $this->id;
    }
    /**
     * get_fio
     *
     * @return string
     */
    public function get_fio(): string
    {
        return $this->fio;
    }
    /**
     * get_country_id
     *
     * @return int
     */
    public function get_country_id(): int
    {
        return $this->country_id;
    }
     /**
     * get_book_id
     *
     * @return int
     */
    public function get_book_id(): int
    {
        return $this->book_id;
    }
    /**
     * get_birthday
     *
     * @return string
     */
    public function get_birthday(): string
    {
        return $this->birthday;
    }
    /**
     * get_photo
     *
     * @return string
     */
    public function get_photo(): string
    {
        return $this->photo;
    }
    
    /**
     * set_fio
     *
     * @param  mixed $fio
     * @return void
     */
    public function set_fio(string $fio)
    {
        $this->fio = $fio;
    }
    /**
     * set_country_id
     *
     * @param  mixed $country_id
     * @return void
     */
    public function set_country_id(int $country_id)
    {
        $this->country_id = $country_id;
    }

    /**
     * set_book_id
     *
     * @param  mixed $book_id
     * @return void
     */
    public function set_book_id(int $book_id)
    {
        $this->book_id = $book_id;
    }
    /**
     * set_birthday
     *
     * @param  mixed $birthday
     * @return void
     */
    public function set_birthday(string $birthday)
    {
        $this->birthday = $birthday;
    }
    /**
     * set_photo
     *
     * @param  mixed $photo
     * @return void
     */
    public function set_photo(int $photo)
    {
        $this->photo = $photo;
    }
    
}