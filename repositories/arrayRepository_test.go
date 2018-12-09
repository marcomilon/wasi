package repositories

import (
	"testing"

	"github.com/marcomilon/wasi/elements"
)

func TestStore(t *testing.T) {
	var storage [10]elements.Element
	arrayRepository := ArrayRepository{storage: storage}
	atom1 := elements.NewAtom("Testing")
	arrayRepository.Store(atom1)
}
