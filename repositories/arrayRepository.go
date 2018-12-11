package repositories

import (
	"fmt"

	"github.com/marcomilon/wasi/elements"
)

type ArrayRepository struct {
	storage []elements.Element
}

func (a ArrayRepository) Store(e elements.Element) {
	s := append(a.storage, e)
	fmt.Printf("len=%d cap=%d %v\n", len(a.storage), cap(a.storage), s)
}

func (a ArrayRepository) List() {

}
