package document_test

import (
	"io/ioutil"
	"testing"

	"github.com/marcomilon/wasi/internal/document"
)

func TestNewWebpage(t *testing.T) {

	var expected interface{}
	var got interface{}

	webpageDef := "testdata/webpage1.json"

	data, err := ioutil.ReadFile(webpageDef)
	if err != nil {
		t.Errorf("expected %v; got %v", nil, err)
	}

	webpage, err := document.NewWebpage(data)
	if err != nil {
		t.Errorf("expected %v; got %v", nil, err)
	}

	section1 := webpage.Sections[0]
	got = section1.Data["title"].(string)
	expected = "Hello World 2"
	if expected != got {
		t.Errorf("expected %v; got %v", expected, got)
	}

	section2 := webpage.Sections[1]
	got = section2.Data["title"].(string)
	expected = "Hello World"
	if expected != got {
		t.Errorf("expected %v; got %v", expected, got)
	}

}

func TestRenderWebPage(t *testing.T) {

	webpageDef := "testdata/webpage1.json"

	data, err := ioutil.ReadFile(webpageDef)
	if err != nil {
		t.Errorf("expected %v; got %v", nil, err)
	}

	webpage, err := document.NewWebpage(data)
	if err != nil {
		t.Errorf("expected %v; got %v", nil, err)
	}

	render, err := webpage.Render()
	if err != nil {
		t.Errorf("expected %v; got %v", nil, err)
	}

	expected := "<p>This is a paragraph</p><h1>Hello World</h1>"
	got := render
	if expected != got {
		t.Errorf("expected %v; got %v", expected, got)
	}
}
