package repositories

import (
	"testing"

	"github.com/marcomilon/wasi/elements"
)

func TestStore(t *testing.T) {
	var storage []elements.Element

	arrayRepository := ArrayRepository{storage: storage}

	atom1 := elements.NewAtom("Testing")
	arrayRepository.Store(atom1)

	if atom1.GetID() != "1" {
		t.Error("Expected Body 1, got ", atom1.GetID())
	}
}
