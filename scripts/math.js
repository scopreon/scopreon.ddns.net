class Complex {
  constructor(a, b) {
    this.re = a;
    this.im = b;
  }

  add(c) {
    const re = this.re + c.re;
    const im = this.im + c.im;
    return new Complex(re, im);
  }

  mult(c) {
    const re = this.re * c.re - this.im * c.im;
    const im = this.re * c.im + this.im * c.re;
    return new Complex(re, im);
  }
}
