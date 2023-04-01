package document_test

import (
	"testing"

	"github.com/marcomilon/wasi/internal/document"
)

func TestNewSection(t *testing.T) {

	var expected interface{}
	var got interface{}

	sectionDef := "testdata/section1.json"

	section, err := document.NewSection(sectionDef)

	if err != nil {
		t.Errorf("expected %v; got %v", nil, err)
	}

	expected = "testdata/section1.html"
	got = section.Metadata["template"].(string)
	if expected != got {
		t.Errorf("expected %v; got %v", expected, got)
	}

	items := section.Data["items"].([]interface{})
	expected = "item2"
	got = items[1]
	if expected != got {
		t.Errorf("expected %v; got %v", expected, got)
	}

	images := section.Data["images"].([]interface{})
	image1 := images[1].(map[string]interface{})

	expected = "img2"
	got = image1["alt"]
	if expected != got {
		t.Errorf("expected %v; got %v", expected, got)
	}

}

func TestRender(t *testing.T) {

	var expected interface{}
	var got interface{}

	sectionDef := "testdata/section1.json"

	section, err := document.NewSection(sectionDef)

	if err != nil {
		t.Errorf("expected %v; got %v", nil, err)
	}

	render, err := section.Render()
	if err != nil {
		t.Errorf("expected %v; got %v", nil, err)
	}

	expected = "<h1>Hello World</h1>"
	got = render

	if expected != got {
		t.Errorf("expected %v; got %v", expected, got)
	}

}
