package repositories

import (
	"fmt"

	"github.com/marcomilon/wasi/elements"
)

type BlackHoleRepository struct{}

func (b BlackHoleRepository) Store(e *elements.Element) *elements.Element {
	fmt.Println("Storing " + (*e).GetBody())
	return e
}

func (b BlackHoleRepository) List() {
}
