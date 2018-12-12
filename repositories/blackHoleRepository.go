package repositories

import (
	"github.com/marcomilon/wasi/elements"
)

type BlackHoleRepository struct{}

func (b BlackHoleRepository) Store(e elements.Element) {
}

func (b BlackHoleRepository) List() []elements.Element {
	var list []elements.Element
	return list
}
