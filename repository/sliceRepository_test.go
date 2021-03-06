package repository

import (
	"testing"

	"github.com/marcomilon/wasi/element"
)

func TestStore(t *testing.T) {
	var sliceStorage []element.Identifier
	sliceRepository := SliceRepository{Storage: sliceStorage}

	atom1 := element.NewAtom("Testing")
	sliceRepository.Store(atom1)

	if atom1.GetID() != "0" {
		t.Error("Expected Body 0, got ", atom1.GetID())
	}

	atom2 := element.NewAtom("Testing")
	sliceRepository.Store(atom2)

	if atom2.GetID() != "1" {
		t.Error("Expected Body 1, got ", atom2.GetID())
	}

	atom3 := element.NewAtom("Testing")
	sliceRepository.Store(atom3)

	if atom3.GetID() != "2" {
		t.Error("Expected Body 2, got ", atom3.GetID())
	}
}

func TestList(t *testing.T) {
	var sliceStorage []element.Identifier
	sliceRepository := SliceRepository{Storage: sliceStorage}

	atom1 := element.NewAtom("Testing")
	sliceRepository.Store(atom1)
	atom2 := element.NewAtom("Testing")
	sliceRepository.Store(atom2)

	expectedRepo := sliceRepository.List()

	if len(expectedRepo) != 2 {
		t.Error("Expected len 2, got ", len(expectedRepo))
	}
}
