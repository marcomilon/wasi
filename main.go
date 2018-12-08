package main

import (
	"fmt"

	"github.com/marcomilon/wasi/element"
)

func main() {
	fmt.Println("Wasi")

	var e1 element.Element = element.NewElmt("Element 1", "Body 1")
	var e2 element.Element = element.NewElmt("Element 2", "Body 2")

	var repo element.Repository = element.BlackHoleRepository{}
	var service element.Service = element.ElmtService{repo}

	service.Persist(e1)
	service.Persist(e2)
}
