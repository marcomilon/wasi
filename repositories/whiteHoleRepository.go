package repositories

import (
	"fmt"

	"github.com/marcomilon/wasi/elements"
)

type WhiteHoleRepository struct{}

func (w WhiteHoleRepository) Store(e elements.Element) {
	fmt.Println("White storing element: " + e.GetBody())
}

func (w WhiteHoleRepository) List() {
	fmt.Println("White listing elements")
}
