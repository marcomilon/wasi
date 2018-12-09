package elements

import (
	"testing"
)

func TestNewAtom(t *testing.T) {
	atom1 := NewAtom("Body 1")

	if atom1.GetBody() != "Body 1" {
		t.Error("Expected Body 1, got ", atom1.GetBody())
	}
}
