package elements

type Atom struct {
	body string
}

func (a Atom) GetBody() string {
	return a.body
}

func NewAtom(body string) Atom {
	return Atom{body: body}
}
