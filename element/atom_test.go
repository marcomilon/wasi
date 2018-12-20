package element

import (
	"testing"
)

func TestIsIdentifier(t *testing.T) {
	atom := NewAtom("Test 1")

	var i interface{} = atom
	_, ok := i.(Identifier)
	if ok == false {
		t.Error("Atom doesn't not implement interface Identifier")
	}
}

func TestNewAtom(t *testing.T) {
	atom := NewAtom("Test 1")

	if atom == nil {
		t.Error("Expected not nil, got nil")
	}
}

func TestGetBody(t *testing.T) {
	atom := NewAtom("Test 1")

	if atom.GetBody() != "Test 1" {
		t.Error("Expected Test 1, got ", atom.GetBody())
	}
}

func TestGetID(t *testing.T) {
	atom := NewAtom("Test 1")

	if atom.GetID() != "" {
		t.Error("Expected nil, got ", atom.GetID())
	}
}
