package repositories

import (
	"strconv"

	"github.com/marcomilon/wasi/elements"
)

type SliceRepository struct {
	Storage []elements.Element
}

func (a *SliceRepository) Store(e elements.Element) {
	e.SetID(strconv.Itoa(len(a.Storage)))
	a.Storage = append(a.Storage, e)
}

func (a SliceRepository) List() []elements.Element {
	return a.Storage
}
