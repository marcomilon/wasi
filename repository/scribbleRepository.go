package repository

import (
	"github.com/marcomilon/wasi/element"
	scribble "github.com/nanobox-io/golang-scribble"
)

type ScribbleRepository struct {
	db *scribble.Driver
}

func NewScribbleRepository(storegePath string) (ScribbleRepository, error) {

	var r ScribbleRepository

	db, err := scribble.New(storegePath, nil)
	if err != nil {
		return r, err
	}

	r = ScribbleRepository{db}

	return r, nil
}

func (s ScribbleRepository) Store(e element.Identifier) {
}

func (s ScribbleRepository) List() []element.Identifier {
	var list []element.Identifier
	return list
}
