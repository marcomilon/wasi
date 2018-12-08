package element

import "fmt"

type BlackHoleRepository struct{}

func (b BlackHoleRepository) Create(e Element) {
	fmt.Println("Backbox storing element: " + e.GetBody())
}

func (b BlackHoleRepository) List() {
	fmt.Println("Backbox listing elements")
}
