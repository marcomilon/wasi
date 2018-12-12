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
	atom2 := elements.NewAtom("Body 2")
	atom3 := elements.NewAtom("Body 3")

	backHoleRepository := repositories.BlackHoleRepository{}
	atomService := services.NewAtomService(backHoleRepository)
	atomService.Store(atom1)

	var sliceStorage []elements.Element
	sliceRepository := repositories.SliceRepository{Storage: sliceStorage}

	atomSliceService := services.NewAtomService(&sliceRepository)
	atomSliceService.Store(atom1)
	atomSliceService.Store(atom2)
	atomSliceService.Store(atom3)
	
	atomsList := atomSliceService.List()
	for _, element := range atomsList  {
		fmt.Printf("ID: %s, Body: %s\n", element.GetID(), element.GetBody())
	}

}
