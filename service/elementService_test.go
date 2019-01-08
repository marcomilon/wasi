package service

import (
	"testing"

	"github.com/marcomilon/wasi/element"
)

func TestNewAtom(t *testing.T) {
	body := "Body 1"
	atom := NewAtom(body)

	if atom.Body != "Body 1" {
		t.Error("Expected body: ", atom.Body)
	}
}

func TestNewBlock(t *testing.T) {
	content := [3]string{"Body 1", "Body 2", "Body 3"}
	atoms := buildAtoms(content)

	block := NewBlock(atoms)

	for i, atom := range block.Body {
		if atom.Body != content[i] {
			t.Error("Expected body: ", atom.Body)
		}
	}
}

func TestNewDocument(t *testing.T) {
	content1 := [3]string{"Body 1", "Body 2", "Body 3"}
	atoms1 := buildAtoms(content1)
	block1 := NewBlock(atoms1)

	content2 := [3]string{"Body 11", "Body 22", "Body 33"}
	atoms2 := buildAtoms(content2)
	block2 := NewBlock(atoms2)

	blocks := []element.Block{block1, block2}

	document := NewDocument(blocks)

	docBody := document.Body
	secondBlock := docBody[1]

	for i, atom := range secondBlock.Body {
		if atom.Body != content2[i] {
			t.Error("Expected body: ", atom.Body)
		}
	}

}

func buildAtoms(atoms [3]string) []element.Atom {
	atom1 := NewAtom(atoms[0])
	atom2 := NewAtom(atoms[1])
	atom3 := NewAtom(atoms[2])

	return []element.Atom{atom1, atom2, atom3}
}
