package main

import (
	"fmt"

	"github.com/marcomilon/wasi/elements"
	"github.com/marcomilon/wasi/repositories"
	"github.com/marcomilon/wasi/services"
)

func main() {
	fmt.Println("Wasi")

	atom1 := elements.NewAtom("Body 1")

	backHoleRepository := repositories.BlackHoleRepository{}

	atomService := services.NewAtomService(backHoleRepository)

	atomService.Persist(atom1)

}
