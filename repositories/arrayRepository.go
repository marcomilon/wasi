package repositories

import "github.com/marcomilon/wasi/elements"

type ArrayRepository struct {
	storage [10]elements.Element
}

func (a ArrayRepository) Store(e elements.Element) elements.Element {
	return e
}

func (a ArrayRepository) List() {

}
