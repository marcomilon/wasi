package repositories

import (
	"fmt"

	"github.com/marcomilon/wasi/elements"
)

type BlackHoleRepository struct{}

func (b BlackHoleRepository) Store(e elements.Element) {
	fmt.Println(fmt.Sprintf("%T", e))
	fmt.Println("Storing " + e.GetBody())
}

func (b BlackHoleRepository) List() {
}
