<?php

require_once '../oop/AudioTrack.php';

class AudioTrack
{
    // to get rid of the deprecation error when using DBBlackbox:
    public ?int $id = null;

    public ?string $name = null;
    public ?string $author_name = null;
    public int $length = 0;
    public ?int $year_of_release = null;
    public ?string $album_name = null;

    public function __construct(null|string $name = null)
    {
        $this->name = $name;
    }

    /**
     * save information about this audio track in the database
     */
    public function save() : void
    {
        if ($this->id !== null) {
            $this->update();
        } else {
            $this->insert();
        }
    }

    /**
     * delete information about this audio track from the database
     */
    public function delete() : bool
    {
        delete($this->id);

        return true;
    }

    /**
     * retrieve information about the author from the database
     */
    public function getAuthor() : Author|null
    {
        return new Author;
    }

    public function getLengthInMinutes() : int|float
    {
        // JS:  this.length
        return $this->length / 60;
    }


    public function insert()
    {
        // use the function from DBBlackbox to insert
        // a new record into the database
        $this->id = insert($this);
    }

    public function update()
    {
        // use the function from DBBlackbox to update
        // the correct record in the database
        update($this->id, $this);
    }

}

class Author
{

}