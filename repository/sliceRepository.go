package repository

import (
	"strconv"

	"github.com/marcomilon/wasi/element"
)

type SliceRepository struct {
	Storage []element.Identifier
}

func (a *SliceRepository) Store(e element.Identifier) {
	e.SetID(strconv.Itoa(len(a.Storage)))
	a.Storage = append(a.Storage, e)
}

func (a SliceRepository) List() []element.Identifier {
	return a.Storage
}
