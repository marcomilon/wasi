package main

import (
	"fmt"

	"github.com/marcomilon/wasi/element"
	"github.com/marcomilon/wasi/repository"
	"github.com/marcomilon/wasi/services"
)

const logPath = "wasi.log"

func main() {
	fmt.Println("Wasi")

	atom1 := element.NewAtom("Body 1")
	atom2 := element.NewAtom("Body 2")
	atom3 := element.NewAtom("Body 3")

	backHoleRepository := repository.BlackHoleRepository{}
	atomService := services.NewAtomService(backHoleRepository)
	atomService.Store(atom1)
	atomService.Store(atom2)
	atomService.Store(atom3)

	var sliceStorage []element.Identifier
	sliceRepository := repository.SliceRepository{Storage: sliceStorage}
	atomSliceService := services.NewAtomService(&sliceRepository)
	atomSliceService.Store(atom1)
	atomSliceService.Store(atom2)
	atomSliceService.Store(atom3)

	atomsList := atomSliceService.List()
	for _, element := range atomsList {
		fmt.Printf("ID: %s, Body: %s\n", element.GetID(), element.GetBody())
	}

}
