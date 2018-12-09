package repository

import (
	"fmt"

	"github.com/marcomilon/wasi/element"
)

type BlackHoleRepository struct{}

func (b BlackHoleRepository) create(e element.Element) {
	fmt.Println("Backbox storing element: " + e.GetBody())
}

func (b BlackHoleRepository) list() {
	fmt.Println("Backbox listing elements")
}
