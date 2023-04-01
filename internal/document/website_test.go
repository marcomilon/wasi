package document_test

import (
	"testing"

	"github.com/marcomilon/wasi/internal/document"
)

func TestNewWebsite(t *testing.T) {

	var expected interface{}
	var got interface{}

	websiteDef := "testdata/website.json"

	website, err := document.NewWebsite(websiteDef)
	if err != nil {
		t.Errorf("expected %v; got %v", nil, err)
	}

	webpage1 := website.Webpages[0]
	got = webpage1.Sections[0].Data["title"].(string)
	expected = "Hello World 2"
	if expected != got {
		t.Errorf("expected %v; got %v", expected, got)
	}

	webpage2 := website.Webpages[1]
	got = webpage2.Sections[0].Data["title"].(string)
	expected = "Hello World"
	if expected != got {
		t.Errorf("expected %v; got %v", expected, got)
	}

}
