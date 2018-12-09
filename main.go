package main

import (
	"fmt"

	"github.com/marcomilon/wasi/elements"
	"github.com/marcomilon/wasi/repositories"
	"github.com/marcomilon/wasi/services"
)

func main() {
	fmt.Println("Wasi")

	var atom1 elements.Element = elements.NewAtom("Body 1")

	backHoleRepository := repositories.BlackHoleRepository{}

	atomService := services.NewAtomService(backHoleRepository)

	atomService.Persist(&atom1)

}
