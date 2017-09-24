unit unitz;

{$mode objfpc}{$H+}

interface

uses
  Classes, SysUtils, FileUtil, Forms, Controls, Graphics, Dialogs, StdCtrls,
  ExtCtrls;

type

  { TForm1 }

  TForm1 = class(TForm)
    Button1: TButton;
    Button2: TButton;
    Edit1: TEdit;
    Edit2: TEdit;
    Edit3: TEdit;
    Edit4: TEdit;
    Label1: TLabel;
    procedure Button1Click(Sender: TObject);
    procedure Button2Click(Sender: TObject);
    procedure Edit1Change(Sender: TObject);

  private
    { private declarations }
  public
    { public declarations }
  end;

var
  Form1: TForm1;

implementation

{$R *.lfm}
function cEcezar(s:string;key:byte):string;
var i:integer; c,d:char;
begin
  for i:=1 to length(s) do
  begin
    c:=s[i];
    if not (c in [#1, #2]) then
      d:=chr((ord(c)+ key)mod 255)
    else d := c;
    Result:=Result+d;
  end;
end;

{ TForm1 }

procedure TForm1.Button1Click(Sender: TObject);
begin

  Edit2.Text := cEcezar(Edit1.Text, 3);
end;

procedure TForm1.Button2Click(Sender: TObject);
begin
  Edit3.Text := cEcezar(Edit2.Text, 252);
end;

procedure TForm1.Edit1Change(Sender: TObject);
begin

end;




end.

