package repositories

import (
	"github.com/marcomilon/wasi/elements"
	scribble "github.com/nanobox-io/golang-scribble"
)

type ScribbleRepository struct {
	db *scribble.Driver
}

func New() (ScribbleRepository, error) {
	dir := "./storage/testdb"

	db, err := scribble.New(dir, nil)

	if err != nil {
		return nil, err
	}

	repository := ScribbleRepository{db}

	return repository, nil

}

func (s ScribbleRepository) Store(e elements.Element) {
}

func (s ScribbleRepository) List() []elements.Element {
	var list []elements.Element
	return list
}
