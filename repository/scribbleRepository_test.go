package repository

import (
	"os"
	"testing"

	"github.com/marcomilon/wasi/element"
)

type Example struct{ Name string }

func TestNew(t *testing.T) {
	storagePath := "../storage/testdb"

	NewScribbleRepository("elements", storagePath)

	if _, err := os.Stat(storagePath); err != nil {
		t.Error("Expected database storage path: ", storagePath)
	}
}

func TestSetID(t *testing.T) {
	storagePath := "../storage/testdb"

	r, _ := NewScribbleRepository("elements", storagePath)
	atom := element.NewAtom("Test 1")

	r.Store(atom)
	if atom.GetID() == "" {
		t.Error("Expected ID not empty, got ", atom.GetID())
	}
}
