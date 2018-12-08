package element

type Elmt struct {
	title string
	body  string
}

func (e Elmt) GetBody() string {
    return e.body
}

func NewElmt(title string, body string) Elmt {
	return Elmt{title: title, body: body}
}