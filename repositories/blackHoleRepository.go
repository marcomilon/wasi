package repositories

import (
	"fmt"

	"github.com/marcomilon/wasi/elements"
)

type BlackHoleRepository struct{}

func (b BlackHoleRepository) Store(e elements.Element) {
	fmt.Println("Backbox storing element: " + e.GetBody())
}

func (b BlackHoleRepository) List() {
	fmt.Println("Backbox listing elements")
}
